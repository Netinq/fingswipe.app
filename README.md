# REST API
## Documention 

### URL [api/scores/getAll]
```
Method : GET
Return Scores
Exemple : 
{
    "scores": [
        {
            "id": 1,
            "score": 15,
            "username": "Quentin Sar",
            "created_at": "2020-09-22T10:26:47.000000Z",
            "updated_at": "2020-09-22T10:27:01.000000Z"
        }
    ]
}
```

### URL [api/scores/]
```
Method : POST
Store new score
Request body :
- [username] string
- [score] integer
```
