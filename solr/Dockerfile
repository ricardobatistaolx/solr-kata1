FROM solr:latest
ADD data/cores/carscore /opt/solr/server/solr/
ADD carsads.json /opt
USER root
RUN chown solr:solr -R /opt
USER solr
