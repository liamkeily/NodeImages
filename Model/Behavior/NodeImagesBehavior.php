<?php
App::uses('ModelBehavior', 'Model');

class NodeImagesBehavior extends ModelBehavior {

	public function setup(Model $model, $config = array()) {
            $model->hasMany['NodeImage'] = array(
                'className' => 'NodeImages.NodeImage',
                'foreignKey' => 'node_id',
                'conditions' => array(),
                'dependent' => true,
		'order' => 'NodeImage.lft',
            );
	}

}
