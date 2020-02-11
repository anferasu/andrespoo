<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "almacenes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $direccion
 *
 * @property Productos[] $productos
 */
class Almacenes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'almacenes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'direccion'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'direccion'], 'string', 'max' => 200],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
        ];
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['almacen' => 'id']);
    }
}
