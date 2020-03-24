SELECT * FROM user, profile, jabatan
where user.id=profile.id
and user.id=jabatan.id
and user.id =1;