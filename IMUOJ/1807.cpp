#include<iostream>
using namespace std;
#include<stack>
#include<queue>
#include<set>
struct car
{
	int id;
	int time;
public:
	car()
	{
		cin >> id >> time;
	}
};
int main()
{
	set<int> car_list;
	stack<struct car> park;
	stack<struct car> temp;
	queue<struct car> road;
	int cap, price;
	cin >> cap >> price;
	char command;
	while (cin >> command)
	{
		if (command == 'E')break;
		if (command == 'A')
		{
			struct car newcar;
			if (park.size() < cap)
			{
				park.push(newcar);
				car_list.insert(newcar.id);
				cout << "汽车" << newcar.id << "停靠在停车场" << park.size() << "号位置\n";
			}
			else
			{
				road.push(newcar);
				cout << "汽车" << newcar.id << "停靠在便道的" << road.size() << "号位置\n";
			}
		}
		else if (command == 'D')
		{
			int id, time;
			cin >> id >> time;
			if (car_list.count(id) == 0)
			{
				cout << "汽车" << id << "不在停车场" << endl;
			}
			else
			{		
				struct car tempcar = park.top();
				while (tempcar.id!=id)
				{
					park.pop();
					temp.push(tempcar);
					tempcar = park.top();
				}
				cout << "汽车" << tempcar.id << "停车" << time - tempcar.time << "小时，缴纳停车费" << (time - tempcar.time)*price << "元" << endl;
				park.pop();
				car_list.erase(tempcar.id);
				while (temp.size())
				{
					struct car tempcar = temp.top();
					temp.pop();
					park.push(tempcar);
				}
				while ((park.size() != cap)&&(road.size()!=0))
				{
					struct car tempcar = road.front();
					road.pop();
					car_list.insert(tempcar.id);
					tempcar.time = time;
					park.push(tempcar);
					cout << "汽车" << tempcar.id << "停靠在停车场" << park.size() << "号位置\n";
				}
			}
		}
	}
}