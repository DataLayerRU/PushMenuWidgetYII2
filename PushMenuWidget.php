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

    /**
     * Is horizontal
     *
     * @var boolean
     */
    public $isHorizontal = false;

    /**
     * Is on bottom
     *
     * @var boolean
     */
    public $isOnBottom = false;

    public function run()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        return $this->render('index',
                [
                'header' => $this->header,
                'options' => $this->options,
                'items' => $this->items,
                'isHorizontal' => $this->isHorizontal,
                'isOnBottom' => $this->isOnBottom
        ]);
    }
}