<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class RegisterForm extends Form
{
    public function buildForm()
    {
        $countries=$this->getData('countries');
        $countryOptions=[];
        foreach($countries->countries as $country)
        {
            $countryOptions[$country->id]=$country->country_name;
        }
        $states=$this->getData('states');
        $stateOptions=[];
        foreach($states->states as $state)
        {
            $stateOptions[$state->id]=$state->name;
        }
        $zones=$this->getData('zones');
        $zoneOptions=[];
        foreach($zones->zones as $zone)
        {
            $zoneOptions[$zone->id]=$zone->name;
        }
        $districts=$this->getData('districts');
        $districtOptions=[];
        foreach($districts->districts as $district)
        {
            $districtOptions[$district->id]=$district->name;
        }
        $this
        ->add('First_Name','text',[
        'wrapper'=>['class'=>'form-group row'],
        'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your First Name'],
            'rules'=>['required']

    ])
        ->add('Last_Name','text',[
            'wrapper'=>['class'=>'form-group row'],
            'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Last Name'],
            'rules'=>['required','min:8']

        ])
            ->add('Email','email',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Email']

            ])
            ->add('Password','password',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Password']
            ])
            ->add('Phone_No','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Enter your Phone Number']
            ])


            ->add('Country','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' =>$countryOptions,
                'selected' => 'Nepal',
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your country'],

            ])
            ->add('State','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' =>$stateOptions,
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your State'],

            ])
            ->add('Zone','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' => $zoneOptions,
                'selected' => 'Bagmati',
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your Zone'],

            ])
            ->add('District','select', [
                'wrapper'=>['class'=>'form-group row'],
                'choices' =>$districtOptions,
                'selected' => 'Nepal',
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your District'],

            ])
            ->add('Locality','text', [
                'wrapper'=>['class'=>'form-group row'],

                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control','placeholder'=>'Select your Locality'],

            ])

            ->add('clear', 'reset', ['label' => 'Clear form',
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-warning col-md-offset-1']
            ])

            ->add('Submit','submit',[
            'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
            'attr'=>['class'=>'btn btn-primary col-md-offset-1']
                ])
            ->add('User_Type','hidden',[
                'default_value'=>1
            ]);

    }
}
