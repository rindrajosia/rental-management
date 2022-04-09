<?php

function userFullName(){
  return auth()->user()->firstName ." ".auth()->user()->lastName;
}
