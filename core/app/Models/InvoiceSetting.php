<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceSetting extends Model {

	protected $fillable = ['start_number', 'terms', 'due_days', 'logo'];

}
