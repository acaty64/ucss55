<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Session;

class AccesoPolicy
{
    use HandlesAuthorization;

    public function is_master()
    {
        return trim(strtolower(\Cache::get('ctype'))) === 'master';
    }

    public function is_consulta()
    {
        return trim(strtolower(\Cache::get('ctype'))) === 'consulta';
    }

	public function is_docente()
    {
        return trim(strtolower(\Cache::get('ctype'))) === 'docente';
    }

    public function is_responsable()
    {
        return trim(strtolower(\Cache::get('ctype'))) === 'responsable';
    }

    public function is_admin()
    {
        return trim(strtolower(\Cache::get('ctype'))) === 'administrador';
    }
}
