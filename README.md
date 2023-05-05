# diffusion_prompt_generation
Tools to make it easier to handle prompts for stable diffusion

Usage: 
Create filename.txt file (or any name)

A man running in %
A lion running in %

Command:
php makeprompt.php filename.txt "forrest" "jungle" "desert"
OR
py makeprompt.py filename.txt "forrest" "jungle" "desert"

(Double quotes needed for Python)

Will produce output :

A man running in forrest

A lion running in forrest

A man running in jungle

A lion running in jungle

A man running in desert

A lion running in desert
