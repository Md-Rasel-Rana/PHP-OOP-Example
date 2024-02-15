<?php
// Trait for managing metadata
trait Metadata {
    protected $metadata = [];

    public function setMetadata($key, $value) {
        $this->metadata[$key] = $value;
    }

    public function getMetadata($key) {
        return isset($this->metadata[$key]) ? $this->metadata[$key] : null;
    }
}

// Trait for managing timestamps
trait Timestamps {
    protected $createdAt;
    protected $updatedAt;

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

// Trait for generating slugs
trait SlugGenerator {
    protected function generateSlug($title) {
        return strtolower(str_replace(' ', '-', $title));
    }
}

// Example class: Article
class Article {
    use Metadata, Timestamps, SlugGenerator;

    protected $title;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function save() {
        // Generate slug
        $slug = $this->generateSlug($this->title);

        // Set created and updated timestamps
        $now = new DateTime();
        $this->setCreatedAt($now->format('Y-m-d H:i:s'));
        $this->setUpdatedAt($now->format('Y-m-d H:i:s'));

        // Save article to database
        // (This is a simplified example)
        echo "Article saved successfully with slug: $slug\n";
    }
}

// Example usage
$article = new Article();
$article->setTitle("Introduction to PHP Traits");
$article->setMetadata('author', 'John Doe');
$article->save();
?>
