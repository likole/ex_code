#include<iostream>
#include<cstring>
using namespace std;
class  Name
{
public:
	Name(char  *pN);
	Name(const Name&);
	Name operator=(Name);
	~Name();
	char  *pName;
};
int main()
{
	int i;
	cin >> i;
	if (i == 0) return 0;
	Name Obj1("ZhangSan");
	Name Obj3("Noname");
	Obj3 = Obj1;
	return 0;
}
Name::Name(char  *pN)
{
	cout << "   Constructing  " << pN << " " << endl;
	pName = new char[strlen(pN) + 1];
	if (pName != 0) strcpy(pName, pN);
}
Name::Name(const Name& Obj)
{
	pName = new char[strlen(Obj.pName) + 1];
	if (pName != 0) strcpy(pName, Obj.pName);
}
Name Name::operator= (Name Obj)
{
	delete[]pName;
	pName = new char[strlen(Obj.pName) + 1];
	if (pName != 0) strcpy(pName, Obj.pName);
	return *this;
}
Name::~Name()
{
	cout << "   Destructing   " << pName << "  " << endl;
	pName[0] = '\0';
	delete[]pName;
}
