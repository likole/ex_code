#include<iostream>
#include<cstring>
using namespace std;
class people
{
public:
	char name[50];
	people(char *p) { strcpy(name, p); cout << "people " << p << " init" << endl; }
};
class student:virtual public people
{
public:
	char stunumber[10];
	student(char *p, char *q):people(p) { strcpy(stunumber, q); cout << "student " << p << " " << q << " init" << endl; }
};
class teacher:virtual public people
{
public:
	char ternumber[10];
	teacher(char *p, char *r):people(p) { strcpy(ternumber, r); cout << "teacher " << p << " " << r << " init" << endl; }
};
class teacher_student:public student,public teacher
{
public:
	teacher_student(char *p, char *q, char *r):people(p),student(p,q),teacher(p,r) { cout << "teacher_student " << p << " " << q << " " << r << " init" << endl; }
};
int main()
{
	int i;
	cin >> i;
	if (i == 0) return 0;
	people p1("ZhangSan");
	student s1("LiSi", "01247012");
	teacher t1("WangWu", "83005");
	teacher_student ts1("ZhaoLiu", "01147011", "92002");
	return 0;
}