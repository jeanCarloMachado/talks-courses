all: front_floripa clean_code

clean_code:
	pandoc $(defaultParameters) -t beamer -H presentation.tex clean_code.md -o build/clean_code.pdf

clean:
	rm -rf build/*
