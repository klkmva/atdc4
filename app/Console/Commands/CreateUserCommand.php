<?php

namespace App\Console\Commands;

use App\Models\User;
use Filament\Facades\Filament;
use Filament\Support\Commands\Concerns\HasPanel;
use Illuminate\Console\Command;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputOption;

use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

#[AsCommand(name: 'app:create-user', aliases: [
    //
])]
class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Création d\'un utilisateur';

    /**
     * @return array<InputOption>
     */
    protected function getOptions(): array
    {
        return [
            new InputOption(
                name: 'first_name',
                shortcut: null,
                mode: InputOption::VALUE_REQUIRED,
                description: 'Prénom de l\'utilisateur',
            ),
            new InputOption(
                name: 'last_name',
                shortcut: null,
                mode: InputOption::VALUE_REQUIRED,
                description: 'Nom de l\'utilisateur',
            ),
            new InputOption(
                name: 'email',
                shortcut: null,
                mode: InputOption::VALUE_REQUIRED,
                description: 'Email',
            ),
            new InputOption(
                name: 'password',
                shortcut: null,
                mode: InputOption::VALUE_REQUIRED,
                description: 'Mot de passe',
            ),
        ];
    }

    /**
     * @var array{'name': string | null, 'email': string | null, 'password': string | null}
     */
    protected array $options;

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->options = $this->options();

        if (! Filament::getCurrentOrDefaultPanel()) {
            $this->error('Filament has not been installed yet: php artisan filament:install --panels');

            return static::FAILURE;
        }

        $user = $this->createUser();
        $this->sendSuccessMessage($user);

        return static::SUCCESS;
    }

    /**
     * @return array{'name': string, 'email': string, 'password': string}
     */
    protected function getUserData(): array
    {
        return [
            'first_name' => $this->options['first_name'] ?? text(
                label: 'Prénom',
                required: true,
            ),

            'last_name' => $this->options['last_name'] ?? text(
                label: 'Nom',
                required: true,
            ),

            'email' => $this->options['email'] ?? text(
                label: 'Email address',
                required: true,
                validate: fn(string $email): ?string => match (true) {
                    ! filter_var($email, FILTER_VALIDATE_EMAIL) => 'The email address must be valid.',
                    User::query()->where('email', $email)->exists() => 'A user with this email address already exists',
                    default => null,
                },
            ),

            'password' => Hash::make($this->options['password'] ?? password(
                label: 'Password',
                required: true,
            )),

            'is_admin' => 1,
        ];
    }

    protected function createUser(): Model & Authenticatable
    {
        /** @var Model & Authenticatable $user */
        $user = User::create($this->getUserData());

        return $user;
    }

    protected function sendSuccessMessage(Model & Authenticatable $user): void
    {
        $this->components->info('Success! ' . $user->getAttribute('email') . " may now log in");
    }
}
