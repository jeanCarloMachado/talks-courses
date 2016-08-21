# talks

To build the talk you will need latex and pandoc installed on your
system.

Alternatively if you are used to docker you can use the container ``docker-doc-generator`` like described below.

```bash
cd presentation-name
docker pull compufour/docker-doc-generator
image=`docker images -q compufour/docker-doc-generator`
docker run -v `pwd`:/presentation -w /presentation -it $image make
```
