<?php
namespace massadigital\select2;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;

class Select2 extends InputWidget
{

    /**
     *
     * @var string the locale ID (e.g. 'fr', 'de') for the language to be used by the Select2 Widget.
     *      If this property not set, then the current application language will be used.
     */
    public $language;

    public $items;
    public $clientOptions;
    

    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }
        $this->registerPlugin();
    }

    protected function registerPlugin()
    {
        $view = $this->getView();
        //Select2Asset::register($view);
        Select2BootstrapAsset::register($view);
        
    
        $id = $this->options['id'];
    
        if ($this->clientOptions) {
            $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
            $js = "jQuery('#$id').select2($options);";
            $view->registerJs($js);
        }else{
        	$js = "jQuery('#$id').select2();";
        	$view->registerJs($js);
        	 
        }
    
    }
    
}