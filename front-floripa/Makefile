all: front_floripa

defaultParameters = --latex-engine=xelatex

front_floripa:
	pandoc $(defaultParameters) -t beamer -H presentation.tex front_floripa.md -o build/front_floripa.pdf
	zathura build/front_floripa.pdf

clean:
	rm -rf build/*
