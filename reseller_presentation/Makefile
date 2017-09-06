all: presentation

presentation:
	pandoc --slide-level 1 --latex-engine=xelatex --highlight-style=tango -t beamer -V fontsize=10pt -H presentation.tex presentation.md -o presentation.pdf

clean:
	rm -rf presentation.pdf
