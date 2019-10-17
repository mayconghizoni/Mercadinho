
-- Drop table

-- DROP TABLE public.impostos;

CREATE TABLE public.impostos (
	id serial NOT NULL,
	nome varchar(45) NOT NULL,
	taxa numeric NOT NULL,
	CONSTRAINT impostos_pkey PRIMARY KEY (id)
);

-- Drop table

-- DROP TABLE public.produtos;

CREATE TABLE public.produtos (
	id serial NOT NULL,
	taxa numeric NOT NULL,
	nome varchar(45) NOT NULL,
	quantidade int4 NOT NULL,
	valor numeric(9,2) NOT NULL,
	CONSTRAINT produtos_pkey PRIMARY KEY (id)
);
