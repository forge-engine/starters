<?php

declare(strict_types=1);

namespace App\Modules\AppAuth\Models;

use App\Modules\ForgeAuth\Contracts\AuthUserInterface;
use App\Modules\ForgeSqlOrm\ORM\Attributes\Column;
use App\Modules\ForgeSqlOrm\ORM\Attributes\ProtectedFields;
use App\Modules\ForgeSqlOrm\ORM\Attributes\Table;
use App\Modules\ForgeSqlOrm\ORM\CanLoadRelations;
use App\Modules\ForgeSqlOrm\ORM\Model;
use App\Modules\ForgeSqlOrm\ORM\Values\Cast;
use App\Modules\ForgeSqlOrm\Traits\HasTimeStamps;

#[Table("users")]
#[ProtectedFields(["password"])]
class User extends Model implements AuthUserInterface
{
    use HasTimeStamps;
    use CanLoadRelations;

    #[Column(primary: true, cast: Cast::INT)]
    public ?int $id = null;

    #[Column(cast: Cast::STRING)]
    public string $status;

    #[Column(cast: Cast::STRING)]
    public string $identifier;

    #[Column(cast: Cast::STRING)]
    public string $email;

    #[Column(cast: Cast::STRING)]
    public string $password;

    public function getId(): int
    {
        return (int) $this->id;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
