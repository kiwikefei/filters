<?php
namespace App\Filters;

class UserFilter extends AbstractFilter
{
    protected $filters = ['name', 'email'];

    protected function name($name)
    {
        $this->query->where('name', 'like', '%' . $name . '%');
    }
    protected function email($email)
    {
        $this->query->where('email', $email);
    }
}