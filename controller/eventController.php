<?php
class Evento {
    public $nome_evento;
    public $data_evento;
    public $attendees;
    public $descrizione;

    public function __construct($nome_evento, $attendees, $descrizione, $data_evento) {
        $this->nome_evento = $nome_evento;
        $this->attendees = $data_evento;
        $this->attendees = $attendees;
        $this->descrizione = $descrizione;
    }
}

class EventController {
    private $eventi = [];

    public function __construct() {
        // Recupero gli eventi dal db.
         //$this->eventi = $this->getEventiFromDb();
    }

    public function view() {
        // lista eventi
        return $this->eventi;
    }

    public function add($nome_evento, $data_evento, $attendees, $descrizione) {
        // aggiungi evento
        $evento = new Evento($nome_evento, $data_evento, $attendees, $descrizione);
        $this->eventi[] = $evento;
        // Qui puoi anche aggiornare il database per riflettere l'aggiunta dell'evento.
    }

    public function edit($index, $nome_evento, $data_evento, $attendees, $descrizione) {
        // modifica evento
        if (isset($this->eventi[$index])) {
            $this->eventi[$index]->nome_evento = $nome_evento;
            $this->eventi[$index]->data_evento = $data_evento;
            $this->eventi[$index]->attendees = $attendees;
            $this->eventi[$index]->descrizione = $descrizione;
        }
    }

    public function delete($index) {
        // elimina evento
        if (isset($this->eventi[$index])) {
            array_splice($this->eventi, $index, 1);
        }
    }
}

?>