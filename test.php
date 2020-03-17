<?php

trait Rectangle
{
    public function render()
    {
        echo "Render rectangle";
    }
}

trait FormElement
{
    public function render()
    {
        echo "Playing form elemnt";
    }
}

class Button
{
    use Rectangle, FormElement{
        Rectangle::render insteadof FormElement;
    }
}

echo "\n";
try {
    $button = new Button();
    $button->render();
} catch (ParseError $t) {
    echo "AAAAAAAA";
    echo EOL, $t->getMessage();
} catch (Exception $e) {
    echo "BBBBBBBB";
    echo EOL, $e->getMessage();
}
echo "\n";
