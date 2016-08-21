# talks
My talks

To build the talk you will need latex and pandoc installed on your
system.

If you are used to docker, an alternative is to use a script like
the following

```bash
cd presentation-name
docker pull compufour/docker-doc-generator
image=`docker images -q compufour/docker-doc-generator`
docker run -v `pwd`:/presentation -w /presentation -it $image make
```
