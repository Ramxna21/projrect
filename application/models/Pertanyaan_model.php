<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan_model extends CI_Model {

    private $table_pertanyaan = 'pertanyaan';
    private $table_jawaban = 'jawaban';

    /**
     * Get questions by group/category
     * @param string $group
     * @return array
     */
    public function get_questions_by_group($group) {
        $this->db->where('group_pertanyaan', $group);
        $this->db->order_by('id_pertanyaan', 'ASC');
        return $this->db->get($this->table_pertanyaan)->result();
    }

    /**
     * Get saved answers for a given formulir_id
     * @param int|null $formulir_id
     * @return array
     */
    public function get_answers_by_formulir($formulir_id = null) {
        if ($formulir_id === null) {
            return [];
        }
        $this->db->where('formulir_id', $formulir_id);
        $results = $this->db->get($this->table_jawaban)->result();
        $answers = [];
        foreach ($results as $row) {
            $answers[$row->pertanyaan_id] = $row->nilai_tersimpan;
        }
        return $answers;
    }

    /**
     * Get questions with saved answers merged for a group and formulir_id
     * @param string $group
     * @param int|null $formulir_id
     * @return array
     */
    public function get_questions_with_answers($group, $formulir_id = null) {
        $questions = $this->get_questions_by_group($group);
        $answers = $this->get_answers_by_formulir($formulir_id);

        foreach ($questions as $question) {
            $question->nilai_tersimpan = isset($answers[$question->id_pertanyaan]) ? $answers[$question->id_pertanyaan] : null;
        }
        return $questions;
    }
}
