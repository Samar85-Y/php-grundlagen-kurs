<?php
class Note {
    private int $id;
    private string $title;
    private string $content;
    private string $created_at;
    
    public function __construct(int $id, string $title, string $content, string $created_at = '') {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->created_at = $created_at ?: date('Y-m-d H:i:s');
    }
    
    public function getId(): int {
        return $this->id;
    }
    
    public function getTitle(): string {
        return $this->title;
    }
    
    public function getContent(): string {
        return $this->content;
    }
    
    public function getCreatedAt(): string {
        return $this->created_at;
    }
    
    public function toArray(): array {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'created_at' => $this->created_at
        ];
    }
}
