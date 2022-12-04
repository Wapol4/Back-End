<?php 

    class Student{
        public string $id;
        public string $name;        
        public string $value;
        private string $sample;


        public function setSample(string $sample): void
        {
            $this->sample = $sample;
        }
        public function __clone() // modifikasi untuk menghpaus clone
        {
            unset($this->sample);
        }

        public function __toString(): string
        {
            return "Student id:$this->id, name:$this->name, value:$this->value";
        }

        public function __invoke(...$arguments):void
        {
            $join = join(",", $arguments);
            echo "Invoke stundet with arguments $join". PHP_EOL;
        }

        public function __debugInfo()
        {
            return [
                "id" => $this->id,
                "name" => $this->name,
                "value" => $this->value,
                "sample" => $this->sample,
                "version" => "1.0.0"
            ];
        }

    }


?>