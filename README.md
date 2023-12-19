Em Laravel 5, a relação um-para-muitos é uma relação onde um modelo está associado a muitos registros em outro modelo. Aqui está um resumo sobre um-para-muitos em Laravel 5:

### 1. Definição da Relação

Para estabelecer uma relação um-para-muitos, você deve definir um método no modelo "um" e usar o método `hasMany` para apontar para o modelo "muitos". Por exemplo, considere os modelos `Post` e `Comment`:

```php
// Modelo Post
class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

// Modelo Comment
class Comment extends Model
{
    // ...
}
```

### 2. Chave Estrangeira

O Eloquent assume por padrão que a chave estrangeira no modelo "muitos" segue uma convenção de nomenclatura, como "post_id" (nome do modelo "um" no singular + "_id"). Se a sua chave estrangeira tem um nome diferente, você pode especificá-la como segundo argumento no método `hasMany`.

### 3. Acesso aos Registros Relacionados

Depois de definir a relação, você pode acessar os registros relacionados usando o método da relação. Por exemplo:

```php
$post = Post::find(1);
$comentarios = $post->comments;
```

### 4. Inserção de Registros Relacionados

Você pode adicionar registros relacionados usando o método `create` ou `save`. Por exemplo:

```php
$post = Post::find(1);
$comentario = $post->comments()->create([
    'conteudo' => 'Um comentário no post.',
]);
```

### 5. Personalização da Chave Estrangeira

Se a chave estrangeira não seguir as convenções de nomenclatura padrão, você pode personalizá-la nos métodos de relacionamento usando o segundo argumento.

### 6. Carregamento Antecipado (Eager Loading)

Para evitar o problema do N+1, onde uma consulta adicional é feita para cada relação, você pode usar o carregamento antecipado:

```php
$posts = Post::with('comments')->get();
```

### 7. Restrições e Consultas

Você pode adicionar restrições e realizar consultas nos registros relacionados usando métodos adicionais no método da relação.

Consulte: [documentação oficial do Laravel sobre Eloquent Relationships](https://laravel.com/docs/5.x/eloquent-relationships#one-to-many) para obter informações detalhadas.
