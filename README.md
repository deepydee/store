# Installation

Run containers:
```bash
make up
```

Dive into app container:
```bash
make app
```

Install npm deps:

```bash
docker-compose run --rm npm i
```

To use Vite HMR run this command within a separate terminal window:
```bash
 docker-compose run --rm --service-ports npm run dev
```
