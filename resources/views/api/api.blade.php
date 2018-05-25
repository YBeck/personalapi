{
    "openapi": "3.0.1",
    "info": {
        "title": "yochanan Beck api",
        "version": "1",
        "description": "get information about yochanan beck"
    },
    "servers": [
        {
            "url": "http://api.yochanan-beck.local"
        }
    ],
    "paths": {
        "/": {
            "get": {
                "tags": [
                    "categories info"
                ],
                "summary": "get a list of categories and allow the user to get more information by using the id",
                "description": "get all resource categories",
                "operationId": "1",
                "responses": {
                    "200": {
                        "description": "return all resource categories"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        },
        "/personal-info": {
            "get": {
                "tags": [
                    "info"
                ],
                "summary": "get information about yochanan beck including email address,  job and links",
                "description": "get information about yochanan beck",
                "operationId": "2",
                "responses": {
                    "200": {
                        "description": "return information about yochanan beck"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        },
        "/education": {
            "get": {
                "tags": [
                    "education"
                ],
                "summary": "get a list of schools and allow the user to get more information by using the id",
                "description": "get all education categories",
                "operationId": "3",
                "responses": {
                    "200": {
                        "description": "return all schools"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        },
        "/education/{id}": {
            "get": {
                "tags": [
                    "education"
                ],
                "summary": "get info about a specific school including location, degree's, and years at that school",
                "description": "get info about a specific school",
                "operationId": "4",
                "parameters": [
                    {
                        "in": "path",
                        "name": "id",
                        "description": "id to get a specific school",
                        "schema": {
                            "type": "string"
                        },
                        "required": true
                    }
                ],
                "responses": {
                    "200": {
                        "description": "return info about a specific school"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        },
        "/projects": {
            "get": {
                "tags": [
                    "projects"
                ],
                "summary": "get a list of projects and allow the user to get more information by using the id",
                "description": "get a list of all projects",
                "operationId": "5",
                "responses": {
                    "200": {
                        "description": "return all resource categories"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        },
        "/projects/{id}": {
            "get": {
                "tags": [
                    "projects"
                ],
                "summary": "get info about a specific project including languages, and dates",
                "description": "get info about a specific project",
                "operationId": "6",
                "parameters": [
                    {
                        "in": "path",
                        "name": "id",
                        "description": "id to get a specific school",
                        "schema": {
                            "type": "string"
                        },
                        "required": true
                    }
                ],
                "responses": {
                    "200": {
                        "description": "return info about a specific project"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        },
        "/employment": {
            "get": {
                "tags": [
                    "jobs"
                ],
                "summary": "get a list of jobs and allow the user to get more information by using the id",
                "description": "get info about yochanan beck's jobs",
                "operationId": "7",
                "responses": {
                    "200": {
                        "description": "return info about yochanan beck's jobs"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        },
        "/employment/{id}": {
            "get": {
                "tags": [
                    "jobs"
                ],
                "summary": "get info about a specific job including location, and dates, and description",
                "description": "get info about a specific job",
                "operationId": "8",
                "parameters": [
                    {
                        "in": "path",
                        "name": "id",
                        "description": "id to get a specific school",
                        "schema": {
                            "type": "string"
                        },
                        "required": true
                    }
                ],
                "responses": {
                    "200": {
                        "description": "return info about a specific job"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        }
    }
}