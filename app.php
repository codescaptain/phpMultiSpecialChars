function secure($val)
{
return (is_array($val))?array_map('secure',$val):htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
}
