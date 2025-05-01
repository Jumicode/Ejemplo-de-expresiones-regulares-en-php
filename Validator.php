<?php
// ---------------------------------------------------
// File: src/Validator.php
// ---------------------------------------------------

class Validator
{
    private $patterns = [
        'username' => '/^[a-zA-Z0-9_]{3,16}$/',
        'email'    => '/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,6}$/',
        'phone'    => '/^\+?\d{1,3}[\s-]?\d{3}[\s-]?\d{3}[\s-]?\d{3}$/',
        'password' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/'
    ];

    private $errors = [];
    private $results = [];

    public function validate(array $data): void
    {
        foreach ($this->patterns as $field => $pattern) {
            $value = trim($data[$field] ?? '');

            if (!preg_match($pattern, $value)) {
                $this->errors[$field] = "El campo '$field' no cumple el formato esperado.";
            } else {
                $this->results[$field] = htmlspecialchars($value, ENT_QUOTES);
            }
        }
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getResults(): array
    {
        return $this->results;
    }
}
