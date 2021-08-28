from cryptography.fernet import Fernet

name = input("what is the message that you want to encrypt ")



key = Fernet.generate_key()
message = name
encoded = message.encode()

f = Fernet(key)
encrypted = f.encrypt(encoded)
encrypt_message = encrypted
print("The encrypted message is", encrypt_message)

file = open('key.key', 'wb')
file.write(key)
file.close()

