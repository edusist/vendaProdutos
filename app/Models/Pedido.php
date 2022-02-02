<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";
    use HasFactory;
    protected $fillable = ['total', 'data_venda', 'quant', 'cliente_id', 'produto_id']; 
}
