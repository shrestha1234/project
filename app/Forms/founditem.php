<?php

namespace Lost\Forms;

use Kris\LaravelFormBuilder\Form;

class founditem extends Form
{
    public function buildForm()
    {
        $itemtypes=$this->getData('itemtypes');
        $itemOptions=[];
        foreach($itemtypes->item_types as $itemtype)
        {
            $itemOptions[$itemtype->id]=$itemtype->name;
        }

        $this
            ->add('Date','date',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],

            ])
            ->add('Category','select',[
                'choices' => $itemOptions,
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])


            ->add('Model','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],

            ])

            ->add('Title','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('Description','textarea',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('Address','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('found_place','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'label'=>'Place where item was found',
                'attr'=>['class'=>'col-md-7 form-control'],

            ])
            ->add('Specific Location','text',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('Image','file',[
                'wrapper'=>['class'=>'form-group row'],
                'label_attr'=>['class'=>'col-md-4 control-label'],
                'attr'=>['class'=>'col-md-7 form-control'],
            ])
            ->add('submit','submit',[
                'wrapper'=>['class'=>'form-group row'],
                'attr'=>['class'=>'btn btn-succus col-md-offset-4'],
            ])
            ->add('UserId','hidden',[
                'default_value'=>1
            ])
            ->add('ItemTypeId','hidden',[
                'default_value'=>1

                /*<button type="submit" class="btn btn-default">Submit</button>*/


            ]);
    }
}