<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperRegistration extends Model
{
    use HasFactory;

    protected $table = 'paper_registrations';

    protected $fillable = [
        'full_name', 'affiliation', 'department', 'institution',
        'country', 'phone', 'email', 'bms_id_no',
        'authors_photograph', 'student_id_card',
        'research_scope', 'paper_id_no', 'paper_title', 'authors_name',
        'manuscript', 'presentation_type', 'presenter_full_name',
        'payment_method', 'tracking_number', 'proof_of_payment',
        'is_approved',
    ];

    // protected $casts = [
    //     'is_approved' => 'boolean',
    // ];
}
