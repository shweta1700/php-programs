
<?php //php 7.0.8

$queue = new Queue(5);
$queue->enqueue(10);
$queue->enqueue(11);
$queue->enqueue(12);

$queue->enqueue(13);
$queue->enqueue(14);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
$queue->enqueue(15);
$queue->enqueue(16);
$queue->enqueue(17);
// $queue->enqueue(18);
$queue->print();


class Queue {
    private $data;
    private $size;
    private $front;
    private $rear;
    
    public function __construct($size){
        $this->size = $size;
        $this->data = array();
        $this->front = -1;
        $this->rear = -1;
    }
    
    public function enqueue($element) {
        if ($this->isfull())
            throw new Exception("Error: Queue is full");
        else if ($this->isempty()) {
            $this->front = $this->rear = 0;
        }
        else {
        $this->rear = ($this->rear + 1) % $this->size;
        }
        $this->data[$this->rear] = $element;
    }
    
    public function dequeue() {
        if ($this->isempty()) {
            throw new Exception("Error: Queue is empty");
        }
        else if ($this->front == $this->rear) {
            $this->front = $this->rear = -1;
        }
        $this->front = ($this->front + 1) % $this->size;        
    }
    
    public function isfull() {
        if ($this->front == (($this->rear+1) % $this->size))
            return true;
        return false;
    }
    
    public function isempty() {
        if ($this->front == -1 && $this->rear == -1) {
            return true;
        }
        return false;
    }
    
    public function print() {
        $f = $this->front;
        $r = $this->rear;
        
        while (true) {
            echo "Index: $f, Value: ".$this->data[$f];
            echo "\n";
            $f = ($f + 1) % $this->size;
            
            if ($f == (($r + 1)%$this->size))
                break;
        }
    }
}
?>