<?php

namespace App\Rules;

use App\Models\Adocao;
use Illuminate\Contracts\Validation\Rule;

class AdocaoUnicaPet implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private int $petId;
    public function __construct($petId)
    {
        $this->petId = $petId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $jaAdoutouEssePet= Adocao::where('email',$value)->where('pet_id',$this->petId)->first();

        return !$jaAdoutouEssePet;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Você já adoutou esse pet.';
    }
}
