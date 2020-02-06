<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estudiantes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property int $edad
 */
class Estudiantes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estudiantes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'edad'], 'required',"mensaje"=>"Es obligatorio"],
            [['edad'], 'integer'],
            [['nombre', 'apellidos'], 'string', 'max' => 20],
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
            'apellidos' => 'Apellidos',
            'edad' => 'Edad',
        ];
    }
}
