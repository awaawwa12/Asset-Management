<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
>>>>>>> mai/main
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
=======
    public function requestPengambilans()
{
    return $this->hasMany(RequestPengambilan::class);
}

public function lantaisAsPIC()
{
    return $this->hasMany(Lantai::class, 'pic_user_id');
}

public function createdItems()
{
    return $this->hasMany(Barang::class, 'created_by');
}

public function updatedItems()
{
    return $this->hasMany(Barang::class, 'updated_by');
}
>>>>>>> mai/main
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
=======
        'role',
>>>>>>> mai/main
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
=======

    /**
     * Get the roles that belong to the user.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Check if user has a specific role.
     */
    public function hasRole(string $role): bool
    {
        // First check the roles table (many-to-many relationship)
        if ($this->roles()->where('name', $role)->exists()) {
            return true;
        }
        
        // Also check the role column in users table
        if ($this->role === $role) {
            return true;
        }
        
        return false;
    }

    /**
     * Assign a role to the user.
     */
    public function assignRole(string $roleName): void
    {
        $role = Role::where('name', $roleName)->first();
        if ($role && !$this->roles()->where('role_id', $role->id)->exists()) {
            $this->roles()->attach($role->id);
        }
    }
>>>>>>> mai/main
}
