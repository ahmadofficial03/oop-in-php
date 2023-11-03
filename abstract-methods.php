<?php 

abstract class ThreeDimensionalShape {
    protected array $dimensions;

    public function __construct(array $dimensions){
        $this->dimensions = $dimensions;
    }

    abstract public function volume(): float;
}



class Cylinder extends ThreeDimensionalShape {
    public function volume(): float {
        return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
    }
}

class Sphere extends ThreeDimensionalShape {
    public function volume(): float {
        return (4/3) * pi() * pow($this->dimensions['radius'], 3);
    }
}




$cylinder = new Cylinder(['radius' => 0.5, 'height' => 20]);

$cylinederVolume = $cylinder->volume();
print_r($cylinederVolume . "<br />");

$sphere = new Sphere(['radius' => 0.5]);

$sphereVolume = $sphere->volume();
print_r($sphereVolume);

?>
