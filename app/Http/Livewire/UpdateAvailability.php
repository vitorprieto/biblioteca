<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BookInstance;

class UpdateAvailability extends Component
{
    public BookInstance $book_instance;
    public $instance;
    public $confirmChange = false;

    public function render()
    {
        return view('livewire.update-availability');
    }

    /**
     * Changes the status Availability of a book instance
     * If status is 0 (Not Available) changes to 1 (Available)
     * and viceversa.
     */
    public function changeAvailability($id, $status)
    {
        $status = ($status == 0) ? 1 : 0 ;
        
        $book_instance = BookInstance::findOrFail($id);
        $book_instance->is_available = $status;
        $book_instance->save();

        $this->confirmChange = false;

        return redirect()->route('bookinstances.index');
    }
}
