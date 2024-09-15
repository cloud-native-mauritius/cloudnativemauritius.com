<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('events:cache-clear')->daily();
