<?php
# ======= Somewhere in a (mu-)plugin, theme or the core ======= #

/**
 * You can have as many arguments as you want,
 * but your callback function and the add_action call need to agree in number of arguments.
 * Note: `add_action` above has 2 and 'i_am_hook' accepts 2.
 * You will find action hooks like these in a lot of themes & plugins and in many place @core
 * @see: http://codex.wordpress.org/Plugin_API/Action_Reference
 */

# ======= e.g., inside your functions.php file ======= #

/**
 * Define callback function
 * Inside this function you can do whatever you can imagine
 * with the variables that are loaded in the do_action() call above.
 */
function who_is_hook( $a, $b )
{
	echo '<code>';
		print_r( $a ); // `print_r` the array data inside the 1st argument
	echo '</code>';

	echo '<br />'.$b; // echo linebreak and value of 2nd argument
}

// then add it to the action hook, matching the defined number (2) of arguments in do_action
// see [http://codex.wordpress.org/Function_Reference/add_action] in the Codex

// add_action( $tag, $function_to_add, $priority, $accepted_args );
add_action( 'i_am_hook', 'who_is_hook', 10, 2 );

// Define the arguments for the action hook
$a = array(
	 'eye patch' => 'yes'
	,'parrot' => true
	,'wooden leg' => (int) 1
);
$b = 'And Hook said: "I ate ice cream with Peter Pan."';

// Executes the action hook named 'i_am_hook'
do_action( 'i_am_hook', $a, $b );


# ======= output that you see in the browser ======= #

Array (
	['eye patch'] => 'yes'
	['parrot'] => true
	['wooden leg'] => 1
)
And hook said: "I ate ice cream with Peter Pan."
