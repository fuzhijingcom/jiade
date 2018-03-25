<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class MajorModel extends RelationModel {
	protected $_link = array(
		'Class' =>self::HAS_MANY,
	);
}