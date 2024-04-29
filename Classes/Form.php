<?php

class Form 
{
    
    public static function validate(array $form, array $formFiedls):bool
    {
        //on parcours les champs
        foreach($formFiedls as $formField)
        {
            //si le champs est absent ou vide dans le formulaire
            if(!isset($form[$formField]) || empty($form[$formField]))
            {
                // on sort en retournant false
                return false;
            }
        }
        // si tout va bien
        return true;
    }

    /**
     * Assainit les données qui sont saisies par l'utilisateur dans un formulaire
     *
     * @param mixed $formData
     * return mixed
     */
    public static function sanitize ($formData) 
    {
        return trim(strip_tags($formData));
    }
}