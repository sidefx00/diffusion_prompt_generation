import sys

# Check if the correct number of arguments were provided
if len(sys.argv) < 3:
    print("Usage: python script.py <text_file> [argument1] [argument2] ...")
    sys.exit(1)

# Load the text file into a string
with open(sys.argv[1], 'r') as file:
    text = file.read()

# Split the text into an array of lines
lines = text.split('\n')

# Loop through each command-line argument and replace % with its corresponding argument for each line
for i in range(2, len(sys.argv)):
    for line in lines:
        line = line.replace('%', sys.argv[i])
        # Echo the modified line
        if line != '':
            print(line)
    # Add a newline character between each loop
    print()
