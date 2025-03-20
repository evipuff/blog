<?php 
Yii::import('zii.widgets.CPortlet');

class TagCloud extends CPortlet
{
    public $title = 'Tags';
    public $maxTags = 20;

    protected function renderContent()
    {
        $tags = Tag::model()->findTagWeights($this->maxTags);

        echo '<div class="bg-pink-100 p-4 rounded-lg shadow-md">';
        echo '<h3 class="text-pink-700 font-bold mb-2">' . CHtml::encode($this->title) . '</h3>';
        echo '<div class="flex flex-wrap gap-2">';

        foreach ($tags as $tag => $weight) {
            $link = CHtml::link(CHtml::encode($tag), array('post/index', 'tag' => $tag), array(
                'class' => 'text-white px-3 py-1 rounded-full transition-all duration-200',
                'style' => "font-size: {$weight}pt; background-color: hsl(" . rand(300, 360) . ", 80%, 70%);"
            ));
            echo $link . "\n";
        }

        echo '</div>';
        echo '</div>';
    }
}
?>
