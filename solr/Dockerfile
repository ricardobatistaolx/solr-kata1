FROM solr:latest
ADD data/cores/carscore /opt/solr/server/solr/
USER root
RUN chown solr:solr -R /opt/solr/server/solr/
USER solr
