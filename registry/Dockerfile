FROM registry

ENV SEARCH_BACKEND sqlalchemy
ENV SQLALCHEMY_INDEX_DATABASE sqlite:////opt/sqlitedb/reg.db
ENV STORAGE_PATH /opt/registry

CMD exec docker-registry
