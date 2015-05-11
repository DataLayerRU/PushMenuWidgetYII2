<?php

namespace datalayerru\PushMenuWidget;

class PushMenuWidget extends \yii\base\Widget
{
    /**
     * Div's options
     *
     * @var array
     */
    public $options = [];

    /**
     * Array of menu items
     *
     * @var array
     */
    public $items = [];

    /**
     * Menu's header
     *
     * @var string
     */
    public $header = '';

    public function run()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        return $this->render('index',
                [
                'header' => $this->header,
                'options' => $this->options,
                'items' => $this->items
        ]);
    }
}